import { GoogleAuthProvider, signInWithPopup } from "https://www.gstatic.com/firebasejs/9.21.0/firebase-auth.js"
import { auth} from './firebase.js'


const googleButton = document.querySelector('#googleLogin')

googleButton.addEventListener('click', async () => {

    const provider = new GoogleAuthProvider()
    provider.setCustomParameters({ prompt: 'select_account consent' });

    try {
        
    const credentials = await signInWithPopup(auth, provider)
    console.log(credentials)
    auth.onAuthStateChanged(user => {
        if (user) {
          // Redireccionar a la página deseada después de autenticarse con Google
          window.location.href = "principal.html";
        }
      });

    } catch (error){
        console.log(error)
    }

})
