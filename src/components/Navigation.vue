|<template>
  <div class="container-nav">
    <nav>
      <img
        class="brand"
        src="https://laika.com.co/assets/home/LaikaMascotas.svg"
      />
      <input type="text" placeholder="¿Que necesita tu mascota?" />
      <i class="fas fa-search"></i>
      <div class="geografi">
        <img
          id="bandera"
          src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Colombia.svg"
          alt=""
        />
        <h3>Bog</h3>
        <i class="fa fa-angle-down"></i>
      </div>
      <div class="session">
        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
        <h3>Mi cuenta</h3>
      </div>
      <div class="card-buy">
        <img src="https://laika.com.co/assets/home/cart_mc.svg" alt="" />
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Navigation",
};
</script>

<style scoped>
* {
  padding: 0;
  margin: 0;
  font-family: inherit;
}
.container-nav {
  background-color: #603e85;
  width: 100%;
  margin: auto;
}

nav,
.session,
.card-buy {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.geografi {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.geografi img {
  margin-left: 10px;
}

#bandera {
  width: 30px;
  margin-right: 10px;
  border-radius: 2px;
}

#arrow {
  color: red;
}

.session {
  margin-left: 300px;
}

.card-buy {
  margin-right: 40px;
}

nav img,
h2 {
  display: inline-block;
}

nav ul {
  display: inline-block;
  list-style: none;
}

nav .brand {
  width: 50px;
}

nav .user {
  width: 30px;
}

input {
  display: flex;
  width: 40%;
  height: 32px;
  border: 0;
  outline: none;
  border-radius: 7px;
  margin-right: 0;
  padding-right: 0;
  padding-left: 15px;
}

.fa-search {
  position: absolute;
  margin-left: 48%;
  color: #603e85;
}

.brand {
  margin-left: 50px;
}

.user {
  margin-right: 50px;
}

.fa-angle-down {
  color: white;
  margin-left: 10px;
}

img,
input,
i,
ul,
.user,
.geografi {
  margin-top: 8px;
  margin-bottom: 8px;
}

.fa-user-circle-o {
  font-size: 25px;
  margin-right: 5px;
  color: white;
}

.session {
  margin-right: 0px;
}

h3 {
  color: white;
  font-size: 15px;
}

.card-buy {
  margin-right: 40px;
  margin-left: 0px;
}

</style>
