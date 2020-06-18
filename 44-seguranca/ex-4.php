<!-- Renderizo o botao e estabeleco a comunicacao entre o site, o captcha, os servidores
da Google, e ao arquivo "cadastrar.php"-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<form action="cadastrar.php" method="post">

    <div class="g-recaptcha" data-sitekey="6LfRTaYZAAAAAEuGL1Bpt0VmFrv1n-68fJYs2VQ0"></div>
    <input type="email" name="inputEmail">
    <button type="submit"> Enviar </button>

</form>