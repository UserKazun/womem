<script setup>
    import LoginTextField from "./LoginTextField.vue";
    import PasswordTextField from "./PasswordTextField.vue";
    import LoginButton from "./LoginButton.vue";
</script>

<template>
    <div class="container">
        <LoginTextField />
        <PasswordTextField />
        <div class="text-end">
            <LoginButton />
        </div>
    </div>
</template>
