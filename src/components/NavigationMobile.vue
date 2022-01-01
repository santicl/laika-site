<template>
    <div class="container-nav">
    <nav>
      <div class="container-icons-img">
        <div class="container-icon">
          <i class="fas fa-bars"></i>
          <div class="container-logo">
            <img
              class="brand"
              src="https://laika.com.co/assets/home/LaikaMascotas.svg"
            />
          </div>
          <div class="geografi">
            <div class="container-bandera">
              <img
                id="bandera"
                src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
                alt=""
              />
              <h3>Bog</h3>
            </div>
            <i class="fa fa-angle-down"></i>
          </div>
          <!--<div class="session">
            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
            <h3>Mi cuenta</h3>
          </div>-->
          <div class="card-buy">
            <img src="https://laika.com.co/assets/home/cart_mc.svg" alt="" />
          </div>
        </div>
        <!--<img
        class="brand"
        src="https://laika.com.co/assets/home/LaikaMascotas.svg"
      />-->
      </div>
    </nav>
    <div class="section-input">
      <input type="text" placeholder="¿Que necesita tu mascota?" />
      <i class="fas fa-search"></i>
    </div>
  </div>
</template>

<script>
export default {
    name: "NavigationMobile"
}
</script>


<style scoped>
* {
  margin: 0px;
  padding: 0px;
}
.container-nav {
  background-color: #603e85;
  width: 100%;
  margin: auto;
  align-items: center;
}

.container-nav nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.container-icon {
  margin-left: 20px;
  width: 100%;
  margin-right: 5px;
}

.container-logo {
  margin-left: 12px;
}

.container-nav nav .container-icons-img,
.container-icons-img,
.container-icon,
.geografi,
.session,
.card-buy {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 2px;
  margin-bottom: 2px;
}

.fa-bars {
  color: white;
}

.geografi {
  margin-left: 50px;
  margin-right: 10px;
}

img {
  width: 30px;
}

.brand {
  margin-left: 83px;
}

.geografi #bandera {
  width: 20px;
}

.card-buy img {
  width: 20px;
  margin-left: 7px;
}

.container-icons-img {
  width: 100%;
}

.container-bandera h3 {
  font-size: 12px;
  color: white;
}

.container-icon .fa-angle-down {
  margin-left: 7px;
  color: white;
}

.section-input {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-left: 20px;
  margin-right: 20px;
}

input {
  width: 100%;
  height: 32px;
  border: 0;
  outline: none;
  border-radius: 7px;
  margin-top: 10px;
  margin-bottom: 10px;
  padding-right: 0;
  padding-left: 15px;
}

.fa-search {
  position: absolute;
  margin-left: 280px;
  color: #603e85;
  
}
/*.container-icons-img {
  position: absolute;
top: 0px;
left: 0px;
}*/

#bandera {
  width: 50px;
}
</style>