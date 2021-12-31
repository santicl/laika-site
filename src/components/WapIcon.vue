<template>
    <div class="container-wap-icon">
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
    </div>
</template>

<script>
export default {
    name: "WapIcon"
}
</script>

<style scoped>

.container-wap-icon {
    position: fixed;
    right: 23px;
    bottom: 50px;
    z-index: 100;
    object-fit: contain;
    border-radius: 50%;
    padding: 7px;
    background-color: #fff;
    color: black;
    box-shadow: 1px 1px 7px 1px grey;
    cursor: pointer;
    transition: .5s;
}

.fa-whatsapp {
    background-color: green;
    color: white;
    border-radius: 50%;
}
</style>
