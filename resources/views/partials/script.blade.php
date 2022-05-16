<!-- JS Scripts -->
<script src="{{ asset('js/app.bundle.js') }}"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js">
    </script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAhYb-Vp3wzD_o1j9iC7OFTZMFd1DEnUQw",
    authDomain: "egaku-space.firebaseapp.com",
    projectId: "egaku-space",
    storageBucket: "egaku-space.appspot.com",
    messagingSenderId: "119409528363",
    appId: "1:119409528363:web:26ac9e3d0150f3845f246e",
    measurementId: "G-HMD5HNXLH6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
