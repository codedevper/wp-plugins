import Alpine from 'alpinejs'
import { getAuth, onAuthStateChanged, signInAnonymously } from "firebase/auth";
import type { User } from "firebase/auth";

const auth = getAuth();

document.addEventListener('alpine:init', () => {
    console.log('auth:store');

    Alpine.store('auth', {
        on: false,
        uid: 'connecting',
        user: auth.currentUser,
        init(this: { uid: string, user: User }) {
            console.log('auth:init');
            onAuthStateChanged(auth, (user) => {
                if (user) {
                    // User is signed in, see docs for a list of available properties
                    // https://firebase.google.com/docs/reference/js/auth.user
                    this.uid = user.uid;
                    console.log('User is signed in', this.uid);
                    this.user = user
                } else {
                    // User is signed out
                    signInAnonymously(auth)
                        .then((credential) => {
                            // Signed in Anonymously
                            console.log('Signed in Anonymously');
                            console.log('User is signed in', credential.user.uid);
                            this.uid = credential.user.uid;
                            this.user = credential.user
                        })
                        .catch((error) => {
                            const errorCode = error.code;
                            const errorMessage = error.message;
                            console.error(errorCode);
                            throw new Error(errorMessage);
                        });
                }
            });
        },
        toggle() {
            //
        }
    })
})