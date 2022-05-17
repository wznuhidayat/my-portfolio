<script src="{{ asset('js/main.js') }}"></script>
<script >
    $(document).ready(function(){
        $(document).on('click','#select',function(){
            var title = $(this).data('title');
            var content = $(this).data('content');
            var categoryes = $(this).data('categoryes');
            $('#title-project').html(title); 
           
            categoryes.forEach(myFunction);
            function myFunction(item, index) {
                $('#category').prepend(item.name+", ")
            }
            $('#content').html(content);
        })
    })
</script>
