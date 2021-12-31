<template>
  <div class="container-all_link_rel">
    <div class="container-links">
      <div class="container-rel">
        <img src="https://laika.com.co/assets/home/secure_mc.svg" alt="" />
        <a href="#">Compras seguras online</a>
      </div>
      <div class="container-rel">
        <img src="https://laika.com.co/assets/home/wallet_mc.svg" alt="" />
        <a href="#">Pago contra entrega</a>
      </div>
      <div class="container-rel">
        <img src="https://laika.com.co/assets/home/truck_mc.svg" alt="" />
        <a href="#">Entregas el mismo dia</a>
      </div>
    </div>
    <div class="container-links">
      <a href="#">Llamanos</a>
      <a href="#">300910849</a>
      <a href="#">Escribenos</a>
    </div>
  </div>
</template>

<script>
export default {
  name: "LinkRel",
};
</script>

<style scoped>
* {
  padding: 0px;
  margin: 0px;
}
.container-all_link_rel {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: black;
}

.container-rel {
  justify-content: center;
  align-items: center;
}

.container-links {
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-align: center;
}

.container-links a {
  margin-bottom: 5px;
}

.container-links a {
  color: antiquewhite;
  text-decoration: none;
  margin-left: 25px;
  margin-right: 25px;
}
</style>