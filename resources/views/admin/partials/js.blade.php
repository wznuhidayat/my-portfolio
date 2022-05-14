<script src="{{ asset('template/mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('template/mazer/dist/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('template/mazer/dist/assets/vendors/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('template/mazer/dist/assets/js/pages/dashboard.js') }}"></script>

<script src="{{ asset('template/mazer/dist/assets/js/mazer.js') }}"></script>
{{-- <script src="{{ asset('template/mazer/dist/assets/vendors/ckeditor/ckeditor.js') }}"></script> --}}
<script src="{{ asset('template/mazer/dist/assets/vendors/choices.js/choices.min.js') }}"></script>
<script src="{{ asset('template/mazer/dist/assets/js/pages/form-element-select.js') }}"></script>
<script>
    function previewImg() {
        const imageItem = document.querySelector('#image');
        const imageItemLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        // imageItemLabel.textContent = imageItem.files[0].name;

        const fileImage = new FileReader();
        fileImage.readAsDataURL(imageItem.files[0]);

        fileImage.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    CKEDITOR.replace('content', {
        filebrowserUploadUrl: "{{ route('project.upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form',
        customConfig: "{{ asset('js/config.js') }}"
    });
</script>
