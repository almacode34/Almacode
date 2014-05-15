<?php $titulo = "almacode | Diseño - Web - Foto" ?>
<?php $description = "Diseño de marca, desarrollo web y fotografía" ?>


<?php include '_header.php' ?>













<section class="container">
	<section class="content_1">
		<article class="welcome">
			<div class="welcome_text">
				<h1>Contáctanos</h1>
				<h3>Estaremos encantados de responderle</h3>
			</div>
		</article>
	</section>

    <section class="contacto">


        <article id="mail_form">

            <form action="enviar.php" id="contact_form" method="post">
                <fieldset>

                    <div class="parte1">
                        <label for="name">Nombre:</label>
                        <input type="text" name="name" placeholder="" required autofocus/>

                        <label for="email">E-mail:</label>
                        <input type="email" name="email" placeholder="ejemplo@correo.com" required/>

                    </div>

                    <div class="parte2">
                        <label for="Mensaje"><h4>Mensaje:</h4></label>
                        <textarea name="mensaje" id="" rows="8" required></textarea>
                    </div>

                    <div class="parte3">
                        <label for="checkbox">Acepto la <a href="#">política de privacidad:</a></label>

                        <input type="checkbox" name="acepto" required/>


                        <button type="submit" class="boton3" >enviar</button>
                    </div>

                </fieldset>
            </form>
        </article>
    </section>




</section>








<?php include '_footer.php' ?>
</body>
</html>
