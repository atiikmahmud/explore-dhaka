<footer class="bg-dark mt-4" style="min-height: 50px">
    <div class="container">
      <div class="footer-section text-light px-5">
        <div class="copy-right-section text-center py-3">
          Copyright &copy; 2022 <a href="{{ route('home') }}" class="text-decoration-none text-light">Explore Dhaka</a>
        </div>
      </div>
    </div>
</footer>

  <script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>