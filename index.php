<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demObywatel</title>
    <link rel="stylesheet" href="styles.css">

<style>
  .loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #121212;
    transition: opacity 0.75s, visibility 0.75s;
  }

  .loader--hidden {
    opacity: 0;
    visibility: hidden;
  }

  .loader::after {
    content: "";
    width: 75px;
    height: 75px;
    border: 15px solid #dddddd;
    border-top-color: #1e1e1e;
    border-radius: 50%;
    animation: loading 0.75s ease infinite;
  }

  @keyframes loading {
    from { transform: rotate(0turn); }
    to { transform: rotate(1turn); }
  }
</style>

<script>
window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    if (loader && loader.parentNode) {
      loader.parentNode.removeChild(loader);
    }
  });
});

// FAKE LOGIN → przekierowanie bez backendu
function fakeLogin(event) {
  event.preventDefault();
  window.location.href = "dashboard.html"; // statyczny dashboard
}
</script>

</head>

<body>
    <div class="loader"></div>

    <div class="login-container">
        <h1>demObywatel</h1>

        <form onsubmit="fakeLogin(event)">
            <input type="text" id="username" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Auth Key" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

<!-- demObywatel 2024 -->
<!-- Strona demonstracyjna -->
</html>
