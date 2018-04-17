<script>
    $('.alert').hide();
    function get_login() {
        var button = '<button class="uk-alert-close uk-close"></button>';
        if ($('#email').val() == '' && $('#password').val() == '') {
            var html = 'Mobile or Email is Requeired';
            html += 'Password is Requeired';
            $('.alert').addClass('bg-warning');
           // $(".alert").text('');
            $(".alert").html(html);
            $('.alert').show();
        } else if ($('#email').val() == '') {
            $(".alert").text('');
            $('.alert').addClass('bg-warning');
            $(".alert").html('Mobile or Email is Requeired');
            $('.alert').show();
        } else if ($('#password').val() == '') {
            $(".alert").text('');
            $('.alert').addClass('bg-warning');
            $(".alert").html('Password is Requeired');
            $('.alert').show();
        } else {
            $.ajax({
                url: '<?= base_url() ?><?= $this->folder?>/Login',
                data: $('#loginform').serialize(),
                type: 'post',
                dataType: 'json',
                success: function (result) {
                    if (result.error == 0) {
                        $(".alert").text('');
                        $('.alert').removeClass('bg-danger');
                        $('.alert').removeClass('bg-warning');
                        $('.alert').addClass('bg-success');
                        $('.alert').html(result.message);
                        $('.alert').show();
                        setTimeout(function () {
                            window.open('<?= base_url() ?><?= $this->folder?>/Dashboard', '_self');
                        }, 1000);

                    } else {
                            $(".alert").text('');
                            $('.alert').removeClass('bg-warning');
                            $('.alert').addClass('bg-danger');
                            $('.alert').html(result.message);
                            $('.alert').show();
                    }
                }
            });
        }
        return false;
    }
</script>




