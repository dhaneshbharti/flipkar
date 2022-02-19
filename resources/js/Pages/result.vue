<template>
    <h2 class="text-center text-blue-500 mt-5"> !!!Thank You for  Browsing</h2>
    <div class="bg-gray-100 p-5">
        <div class="bg-blue-200 p-5 rounded-t-lg">
        <table class="rounded-t-lg">
        <div><thead class="rounded-t-lg">
            <th class="rounded-t-lg bg-white-100">  
              <td>No.</td>
              <td>Role</td>
              <td>Worker</td>  
            </th>
            </thead>
        </div>
        <div>
          <tbody>
              <!-- <tr>
                <td>No.</td>
                <td>Role</td>
                <td>Worker</td>
              </tr>
               <tr>
                <td>No.</td>
                <td>Role</td>
                <td>Worker</td>
              </tr>
               <tr>
                <td>No.</td>
                <td>Role</td>
                <td>Worker</td>
              </tr> -->
            <tr v-for="(ele, index) in datatable">
              <td>{{index+1}}    </td>
              <td>{{ele.Role}}   </td>
              <td>{{ele.Worker}} </td>  
            </tr>
          </tbody>  
        </div>
        </table>

    </div>
        </div>


</template>
export default {
        name:"result",
        data(){
            return{
                datatable:[]
            }

        },
        methods:{
            fetchList(){
                axios.post('/api/workers/result').then(response =>{
                    if(response.status === 200){
                        this.workers = response.data.data
                    }
                })
            },
            
        },
        created() {
            this.fetchList();

        }
    }

</script>

<style scoped>

</style>