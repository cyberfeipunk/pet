<template>
    <div class="animated fadeIn">
        <v-form :moduleTitle="$t('module.petCategoryCreate')">
            <div slot="form">
                <category-form :form="form"></category-form>
            </div>
        </v-form>
    </div>
</template>

<script type="text/ecmascript-6">
    import CategoryForm from './Form'
    export default {
        components:{ CategoryForm },
        data(){
            return {
                form:{
                    name:'',
                    sort:0
                }
            }
        }
    }
</script>