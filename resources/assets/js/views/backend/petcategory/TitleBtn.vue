<template>
    <div class="table-button" slot="titleButton">
        <el-button-group>
            <el-button type="primary" size="small" @click="createView"><i class="el-icon-plus"></i></el-button>
        </el-button-group>
    </div>
</template>

<script type="text/ecmascript-6">
    import { petCategoryView } from "../../../config/backend/views";

    export default {

        methods:{
            createView(){
               //console.log(this.$router);
                this.$router.push({name: petCategoryView.create});
            }
        }
    }

</script>