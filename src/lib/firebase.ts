// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyANd45fDygTmpQ1fSlaMXR2OsMoJMM0qRk",
    authDomain: "hello-acme.firebaseapp.com",
    databaseURL: "https://hello-acme-default-rtdb.firebaseio.com",
    projectId: "hello-acme",
    storageBucket: "hello-acme.firebasestorage.app",
    messagingSenderId: "950634180433",
    appId: "1:950634180433:web:b0c26087fbda453f1aed70",
    measurementId: "G-Z5MTZL3R9K"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);

export { app, analytics }