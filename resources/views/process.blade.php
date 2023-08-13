<!DOCTYPE html>
<html lang="en">

<head>

<!-- apply google adsence code -->


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <title>Please Wait</title>
  <link rel="icon" type="image/x-icon" href="icon.png">
  
  <style>
    body {
  background-color: #f1f1f1;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.container {
  text-align: center;
}

.loader {
  width: 80px;
  height: 80px;
  border: 10px solid #007bff;
  border-top-color: transparent;
  border-radius: 50%;
  animation: spin 1s infinite linear;
  margin: 0 auto;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

h2 {
  margin-top: 20px;
  font-size: 24px;
  color: #333;
}
  </style>

  <style>
    .neon-text {
  font-size: 2em;
  font-family: 'Arial', sans-serif;
  color: #fff;
  text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
  animation: neon-glow 1.5s ease-in-out infinite alternate;
}

@keyframes neon-glow {
  0% {
    text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
  }
  100% {
    text-shadow: 0 0 20px rgba(0, 255, 0, 0.8), 0 0 30px rgba(0, 255, 0, 0.8), 0 0 40px rgba(0, 255, 0, 0.8);
  }
}
  </style>
  <script src="jquery.js"></script>

  <!-- google ads script -->

</head>

<body>
  <div class="container" id="containerLoader">
    <!-- <div class="loader"></div> -->
    <h1 id="countdown" class="text-center fs-2">Please wait for <?php echo $sec; ?> seconds...</h2>
    <br>
    <br>
    <h4 style="color:blue;" class="fs-4 neon-text">
  <b>  We understand that ads can be annoying, but they also help support the content and services you love. By disabling your adblocker, you're helping creators and websites continue to provide valuable information and entertainment. Your small gesture can make a big difference. Thank you for considering it.
  </b>
  </h4>
  <br>
  <h6 class="text-center">
  Thanks,
    Shimanta Das <br>
    microcodes.in
  </h6>
  </div>

  <br>
  <br>
  <br>

  <form action="{{url('/')}}/final_download" method="GET" id="processFRM">
    <input type="hidden" name="topic" value="{{$topic}}" required>
    <input type="hidden" name="fileName" value="{{$filename}}" required>
    <input type="text" style="font-size:30px;" placeholder="Enter your email" name="emailbox" required>
    @error('emailbox')
    <span style="color:red;">{{$message}}</span>
    @enderror
    <br>
    <small>Don't worry we will never share your email address with any third parties.</small>
    <br>
    <br>
    <br>
    <button type="submit" style="font-size:50px;color:white;background-color:blue;">GET LINK</button>
  </form>

</body>
<script>
$(document).ready(function(){
    $('#processFRM').hide();

    // countdown script
    const countdownElement = document.getElementById('countdown');
let countdown = <?php echo $sec; ?>;

countdownElement.textContent = `Please wait for ${countdown} seconds...`;

const countdownInterval = setInterval(() => {
  countdown--;
  countdownElement.textContent = `Please wait for ${countdown} seconds...`;

  if (countdown === 0) {
    clearInterval(countdownInterval);
    countdownElement.textContent = 'Done!';
    $('#containerLoader').hide();
    $('#processFRM').show();
  }
}, 1000);


});
</script>

</html>
