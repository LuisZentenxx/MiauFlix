// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-auth.js"
// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyCaJ6kCzVUZEXupIMip1qh3RN1mshjTvaE",
  authDomain: "miauflix-f49c3.firebaseapp.com",
  projectId: "miauflix-f49c3",
  storageBucket: "miauflix-f49c3.appspot.com",
  messagingSenderId: "233282848493",
  appId: "1:233282848493:web:f66f02d0262ff6c817eee4"
};

// Initialize and export Firebase
export const app = initializeApp(firebaseConfig);
export const auth = getAuth(app);