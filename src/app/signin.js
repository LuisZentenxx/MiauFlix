import { signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-auth.js"
import { auth } from './firebase.js'

const signInForm = document.querySelector('#signin-form');

signInForm.addEventListener('submit', async(e) => {
    e.preventDefault()

    const email = signInForm['signin-email'].value;
    const passwd = signInForm['signin-passwd'].value;

    try{
    const credentials = signInWithEmailAndPassword(auth, email, passwd)
    console.log(credentials)
    } catch (error) {
        console.log(error)
    }
});