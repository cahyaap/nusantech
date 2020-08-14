<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#generate-form').submit(function(e){
            e.preventDefault();
            var _this = $('#generate-btn');
            _this.hide();
            $('#please-wait').show();

            $('#suku-alert').hide();

            var suku = $('#suku').val();

            if (suku === "") {
                $('#please-wait').hide();
                $('#suku-alert').show();
                _this.show();
                return false;
            }

            $('#result').empty();
            $('#result-text').empty();
            $.ajax({
                url: "{{ route('generate') }}",
                type: "POST",
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    suku: suku
                },
                success: function(res) {
                    $('#please-wait').hide();
                    _this.show();
                    if(res.maze === "") {
                        $('#result-text').html("<p><strong>" + res.s + "</strong> bukan bagian dari <strong>4n-1</strong>, silahkan input angka lain</p>");
                    }else{
                        $('#result-text').html("<p>Berikut hasil pola yang terbentuk dengan input <strong>" + res.s + "</strong>:</p>");   
                    }
                    $('#result').append(res.maze);
                }
            });
        });
    });
</script>