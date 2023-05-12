import { createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-auth.js"
import { auth } from './firebase.js'
import { showMessage } from './showMessage.js'

const signupForm = document.querySelector('#signup-form')

signupForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const email = signupForm['signup-email'].value
    const passwd = signupForm['signup-passwd'].value
    
    //Al crear el usuario retorna sus datos
    try {
    const userCredentials = await createUserWithEmailAndPassword(auth, email, passwd)
    console.log(userCredentials)

    showMessage("User Created Successfully" )

    window.location.href="principal.html";

    } catch (error){
        console.log(error.message)
        console.log(error.code)

        if (error.code === 'auth/email-already-in-use'){
            showMessage("Email already in use", "error")
        } else if (error.code === 'auth/invalid-email'){
            showMessage("Invalid Email Error", "error")
        } else if (error.code === 'auth/weak-password') {
            showMessage("Password weak", "error")
        }else if (error.code){
            showMessage(error.message, "error")
        }
    }
});