<template>
    <div>
          <div class="listing-item-grid_container fl-wrap">
            <div class="row">
                <!--  listing-item-grid  -->
                <div class="col-sm-4">
                    <div class="listing-item-grid">
                        <div class="bg"  data-bg="images/all/56.jpg"></div>
                        <div class="d-gr-sec"></div>
                        <div class="listing-counter color2-bg"><span>16 </span> Locations</div>
                        <div class="listing-item-grid_title">
                            <h3><a href="listing.html"><p v-for='(retorno) in retorno' ::key="retorno.id">
                                <!--<input type="hidden" name="" id="ids" value={{retorno.categoria_id}} onchange="Lprovincia"> -->

                                {{retorno.nome}}</p></a></h3>
                        </div>
                    </div>
                </div>
                <!--  listing-item-grid end  -->
                <!--  listing-item-grid  -->
                <div class="col-sm-4">
                    <div class="listing-item-grid">
                        <div class="bg"  data-bg="images/all/57.jpg"></div>
                        <div class="d-gr-sec"></div>
                        <div class="listing-counter color2-bg"><span>22 </span> Locations</div>
                        <div class="listing-item-grid_title">
                            <h3><a href="listing.html">Paris</a></h3>
                            <p>Constant care and attention to the patients makes good record</p>
                        </div>
                    </div>
                </div>
                <!--  listing-item-grid end  -->
                <!--  listing-item-grid  -->
                <div class="col-sm-4">
                    <div class="listing-item-grid">
                        <div class="bg"  data-bg="images/all/58.jpg"></div>
                        <div class="d-gr-sec"></div>
                        <div class="listing-counter color2-bg"><span>9 </span> Locations</div>
                        <div class="listing-item-grid_title">
                            <h3><a href="listing.html">Moscow</a></h3>
                            <p>Constant care and attention to the patients makes good record</p>
                        </div>
                    </div>
                </div>
                <!--  listing-item-grid end  -->
                <!--  listing-item-grid  -->
                <div class="col-sm-4">
                    <div class="listing-item-grid">
                        <div class="bg"  data-bg="images/all/60.jpg"></div>
                        <div class="d-gr-sec"></div>
                        <div class="listing-counter color2-bg"><span>12 </span> Locations</div>
                        <div class="listing-item-grid_title">
                            <h3><a href="listing.html">Rome</a></h3>
                            <p>Constant care and attention to the patients makes good record</p>
                        </div>
                    </div>
                </div>
                <!--  listing-item-grid end  -->
                <!--  listing-item-grid  -->
                <div class="col-sm-8">
                    <div class="listing-item-grid">
                        <div class="bg"  data-bg="images/all/59.jpg"></div>
                        <div class="d-gr-sec"></div>
                        <div class="listing-counter color2-bg"><span>33 </span> Locations</div>
                        <div class="listing-item-grid_title">
                            <h3><a href="listing.html">London</a></h3>
                            <p>Constant care and attention to the patients makes good record</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <a href="listing.html" class="btn dec_btn   color2-bg">View All Cities<i class="fal fa-arrow-alt-left"></i></a>
        </div>
</template>
<script>
export default {
    data() {
        return {
        retorno : "",
        provincia:"",

        }
    },

    mounted() {
        this.listar();
        this.Lprovincia();
    },

    methods: {
        listar(){
    axios.get("locais").then(respose=>{this.retorno=respose.data
    console.log(this.retorno)})
    },
        Lprovincia(){
    var x=$("#ids").value
    axios.get("ret_Provincia/"+x).then(respose=>{this.provincia=respose.data
    console.log(this.provincia)})
        }
    },
}
</script>
