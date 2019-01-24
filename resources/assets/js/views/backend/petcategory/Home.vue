<template>
    <div class="animated fadeIn">
        <v-searchTable :moduleTitle="$t('module.petCategorytitle')">
            <SearchView slot="search" @searchListData="searchListData"></SearchView>
            <TitleBtn slot="titleButton"></TitleBtn>

            <v-table slot="table" apiUrl="/pet/category?o=asc" :fields="fields" :views="views" ref="table" @handleDelete="handleDelete">

            </v-table>
        </v-searchTable>
    </div>
</template>

<script type="text/ecmascript-6">
    import SearchView from "./Search";
    import TitleBtn from "./TitleBtn";
    import { notificationReload } from "../../../helps/helps";
    import { petCategoryView } from "../../../config/backend/views";

    export default {
        components: {SearchView,TitleBtn},
        data(){
            return {
                views:petCategoryView,
                fields:[
                    {
                        label:'宠物分类名称',
                        text:'name'
                    }
                ],
                multipleSelection:[]
            }
        },
        methods:{
            searchListData(params){
                this.$refs.table.getTableData('',params);
            }
        }
    }
</script>