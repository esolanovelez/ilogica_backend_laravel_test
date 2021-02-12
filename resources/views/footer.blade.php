<script>
    $(document).ready(function(){

        $('.ir-arriba').click(function(){
            $('body, html').animate({
                scrollTop: '0px'
            }, 300);
        });

        $(window).scroll(function(){
            if( $(this).scrollTop() > 0 ){
                $('.ir-arriba').slideDown(300);
            } else {
                $('.ir-arriba').slideUp(300);
            }
        });

    });

    $(".menu-link").find("a").click(function(e) {
        e.preventDefault();
        var section = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(section).offset().top
        });
    });
</script>
<style>
    .ir-arriba {
        display:none;
        padding:10px;
        background:#024959;
        border-radius: 20px;
        font-size:20px;
        color:#fff;
        cursor:pointer;
        position: fixed;
        bottom:20px;
        right:20px;
        z-index: 10000;
    }
</style>
<span class="ir-arriba"><i class="fas fa-arrow-alt-circle-up"></i></span>
<div class="page-footer-section bg-dark fg-white">
    <div class="container">
        <div class="row mb-5 py-3">
        <div class="col-sm-6 col-lg-2 py-3">
            <h5 class="mb-3">Pages</h5>
            <ul class="menu-link">
                <li><a href="#" class="">Features</a></li>
                <li><a href="#clientes" class="">Customers</a></li>
                <li><a href="#" class="">Pricing</a></li>
                <li><a  href="{{ url('/gdpr') }}" class="">GDPR</a></li>
            </ul>
        </div>
        <div class="col-sm-6 col-lg-2 py-3">
            <h5 class="mb-3">Company</h5>
            <ul class="menu-link">
            <li><a href="#" class="">About</a></li>
            <li><a href="#team" class="">Team</a></li>
            <li><a href="#" class="">Leadership</a></li>
            <li><a href="#" class="">Careers</a></li>
            <li><a href="#" class="">HIRING!</a></li>
            </ul>
        </div>
        </div>
    </div>
</div>