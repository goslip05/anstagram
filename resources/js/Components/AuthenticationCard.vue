<template>
    <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        

        <div class="w-full px-6 py-4 mt-6 overflow-hidden bg-white shadow-md sm:max-w-md sm:rounded-lg">
            <div class="flex justify-center">
                <slot name="logo" />
            </div>
            <slot />
        </div>
        <slot name="register" />
    </div>
</template>
