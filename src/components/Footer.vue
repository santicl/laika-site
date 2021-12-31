<template>
  <footer>
    <div class="container-footer">
      <div id="container-brand" class="container-footer_items">
        <img class="brand" src="https://laika.com.co/assets/LAIKA.png" />
        <h3>siguenos en:</h3>
        <div class="container-brand_social_link">
          <li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
          <li><i class="fa fa-instagram" aria-hidden="true"></i></li>
          <li><i class="fa fa-facebook-official" aria-hidden="true"></i></li>
        </div>
      </div>
      <div class="container-footer_items">
        <h3>Acerca de Laika</h3>
        <a href="#">Sobre Laika</a>
        <a href="#">Servicios</a>
        <a href="#">Trabaja con nosotros</a>
        <a href="#">Blog</a>
        <a href="#">Terminos y condiciones</a>
      </div>
      <div class="container-footer_items">
        <h3>Links de interes</h3>
        <a href="#">Preguntas frecuentes</a>
        <a href="#">¿Como comprar en Laika?</a>
        <a href="#">Politica de privacidad</a>
        <a href="#">Contactenos</a>
        <a href="#">Politicas de entrega</a>
      </div>
      <div class="container-footer_items">
        <h3>Informacion</h3>
        <a href="#">Telefono: 66654125</a>
        <a href="#">servicioclientes@laika.com.co</a>
        <a href="#">Bogota DC, Colombia</a>
      </div>
      <div class="container-footer_items">
        <h3>Suscribete</h3>
      <p>Recibe noticias y promociones al instante.</p>
      <div class="container-input">
        <input type="email" placeholder="Correo electronico" />
        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
      </div>
      <div class="container-check">
        <input type="checkbox" id="check" />
        <p>He leido y acepto las politicas de privacidad</p>
      </div>
      </div>
    </div>
    <div class="other-brands">
      <div class="other-brands-brand">
        <img
          src="https://laika.com.co/assets/laika_vetcare/Mercado_pago.png"
          alt=""
        />
        <img
          src="https://laika.com.co/assets/laika_vetcare/MASTER.png"
          alt=""
        />
        <img src="https://laika.com.co/assets/laika_vetcare/VISA.png" alt="" />
        <img
          src="https://laika.com.co/assets/laika_vetcare/AMERICAN.png"
          alt=""
        />
      </div>
      <div class="other-brands-store">
        <img src="https://laika.com.co/assets/huaweiGallery.png" alt="" />
        <img src="https://laika.com.co/assets/APP.png" alt="" />
        <img src="https://laika.com.co/assets/GOOGLEP.png" alt="" />
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "Footer",
};
</script>
<style scoped>
* {
  padding: 0px;
  margin: 0px;
}
.container-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-left: 120px;
  margin-right: 120px;
  margin-bottom: 30px;
  margin-top: 40px;
}

.container-footer_items {
  display: flex;
  flex-direction: column;
  height: 200px;
}

.container-brand {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.container-brand_social_link li {
  display: inline-block;
  margin-left: 5px;
  margin-right: 5px;
}

.container-brand_social_link li i {
    color: #603e85;
    font-size: 25px;
}

.container-footer_items h3 {
  color: #603e85;
  margin-bottom: 20px;
}

.container-footer_items a {
  margin-bottom: 12px;
  text-decoration: none;
  color: #603e85;
}

.other-brands {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-left: 300px;
  margin-right: 300px;
}

.other-brands-brand {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.other-brands-brand img {
    height: 50px;
    margin-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: 10px;
}

.other-brands-store {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.other-brands-store img {
    height: 30px;
    margin-left: 10px;
    margin-right: 10px;
}

img {
  width: 75px;
}

* {
  margin: 0px;
  padding: 0px;
}

.container-footer_items {
  margin-right: 10px;
}

.container-footer-icon {
  display: flex;
  flex-direction: column;
  margin-top: 30px;
  margin: 20px;
}

.container-input {
  display: flex;
  justify-content: center;
  align-items: center;
}

input {
  width: 95%;
  height: 32px;
  border-radius: 7px;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-left: 15px;
}

.fa-arrow-circle-right {
  position: absolute;
  margin-left: 250px;
  margin-top: 2px;
  color: #603e85;
}

.container-footer-icon h3,
p,
input {
  color: #603e85;
  margin-bottom: 5px;
}

img {
  width: 70px;
  margin-left: 5px;
  margin-right: 5px;
}

.container-check {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

#check {
  width: 15px;
  margin-bottom: 15px;
  margin-right: 5px;
}

.other-brands {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.other-brands-brand {
  justify-content: center;
  align-items: center;
  margin-top: 12px;
  margin-bottom: 12px;
}

.other-brands-store {
  justify-content: center;
  align-items: center;
  margin-top: 12px;
  margin-bottom: 12px;
}
</style>
