<hr>


<footer style="text-align: center">
    <p>Projet Laravel &copy;2017</p>
</footer>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->

<script src="{{ asset('/js/like.js') }}"></script>
<script>
    var urlLike = '{{ route('like') }}';
    var token = '{{ Session::token() }}';
</script>





