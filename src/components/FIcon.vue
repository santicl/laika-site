<template>
  <div class="container-footer-icon">
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
      <img src="https://laika.com.co/assets/laika_vetcare/MASTER.png" alt="" />
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
</template>

<script>
export default {
  name: "FIcon",
};
</script>



<style scoped>
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