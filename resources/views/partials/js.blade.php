<script >
    $(document).ready(function(){
        var owl = $(".owl-carousel");
        owl.owlCarousel({
            center: true,
            items:2,
            loop:true,
            
            responsive:{
                480 : {
                    margin:10,
                },
                600:{
                    margin:20,
                },
                1000:{
                    margin:32,
                }
             }   
        });
        $(document).on('click','#select',function(){
            var title = $(this).data('title');
            var content = $(this).data('content');
            var categoryes = $(this).data('categoryes');
            var github = $(this).data('github');
            console.log(github);
            $('#title-project').html(title); 
            categoryes.forEach(myFunction);
            function myFunction(item, index) {
                $('#category').prepend(item.name+", ")
            }
            $('#content').html(content);
            $('#github').attr("href",github);
        })
    })
</script>
<script type="text/javascript" src="{{ asset('template/OwlCarousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

