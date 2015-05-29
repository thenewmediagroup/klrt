
<h3>Commercial Property Search</h3>
<form id="SearchFormElement" name="SearchForm"
      action="/search-listings/l/Search.form" method="GET"
      style="margin: 0; padding: 0">

    <input type="hidden" name="noredir" value="false">

    <div>
        <div >
            <div style="text-align: left">
                <fieldset id="selectedFields" style="/*clear: both; margin-top: 10px;*/">
                    <!--<legend class="large-legend">Commercial Property Search:</legend>-->

                    <div class="control-holder">
                        <div id="CITY">
                            <!--<div class="large-label">City/Town:</div>-->
                            <select class="large-control" name="values[CITY]" style="/*width: 280px*/" >
                                <option value="" disabled selected>Community</option>
                                <option value="Blackfalds"
                                    >Blackfalds</option>
                                <option value="Lacombe"
                                    >Lacombe</option>
                                <option value="Penhold"
                                    >Penhold</option>
                                <option value="Red Deer"
                                    >Red Deer</option>
                                <option value="Sylvan Lake"
                                    >Sylvan Lake</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-holder">
                        <div id="PROPERTY_SUBTYPE">
                            <!--<div class="large-label">Property Sub Type:</div>-->
                            <select class="large-control" name="values[PROPERTY_SUBTYPE]" style="/*width: 280px*/">
                                <option value="" disabled selected>Commercial Type</option>
                                <option value="BUIL"
                                    >Building</option>
                                <option value="BUSI"
                                    >Business</option>
                                <option value="FLNB"
                                    >Farm Land & Buildings</option>
                                <option value="INDU"
                                    >Industrial</option>
                                <option value="INST"
                                    >Institutional</option>
                                <option value="LAND"
                                    >Land</option>
                                <option value="LNDO"
                                    >Farm Land Only</option>
                                <option value="OFFI"
                                    >Office</option>
                                <option value="RETA"
                                    >Retail</option>
                                <option value="SHOP"
                                    >Shopping Centre</option>
                                <option value="WARE"
                                    >Warehouse</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-holder">
                        <div id="PRICE_from">
                            <!--<div class="large-label">Asking Price Min:</div>-->
                            <select class="large-control" name="values[PRICE_from]" style="/*width: 280px*/">
                                <option value="" disabled selected>Min Price</option>
                                <option value="10000"
                                    >$10,000 Min</option>
                                <option value="20000"
                                    >$20,000 Min</option>
                                <option value="30000"
                                    >$30,000 Min</option>
                                <option value="40000"
                                    >$40,000 Min</option>
                                <option value="50000"
                                    >$50,000 Min</option>
                                <option value="60000"
                                    >$60,000 Min</option>
                                <option value="70000"
                                    >$70,000 Min</option>
                                <option value="80000"
                                    >$80,000 Min</option>
                                <option value="90000"
                                    >$90,000 Min</option>
                                <option value="100000"
                                    >$100,000 Min</option>
                                <option value="200000"
                                    >$200,000 Min</option>
                                <option value="300000"
                                    >$300,000 Min</option>
                                <option value="400000"
                                    >$400,000 Min</option>
                                <option value="500000"
                                    >$500,000 Min</option>
                                <option value="600000"
                                    >$600,000 Min</option>
                                <option value="700000"
                                    >$700,000 Min</option>
                                <option value="800000"
                                    >$800,000 Min</option>
                                <option value="900000"
                                    >$900,000 Min</option>
                                <option value="1000000"
                                    >$1,000,000 Min</option>
                                <option value="2000000"
                                    >$2,000,000 Min</option>
                                <option value="3000000"
                                    >$3,000,000 Min</option>
                                <option value="4000000"
                                    >$4,000,000 Min</option>
                                <option value="5000000"
                                    >$5,000,000 Min</option>
                                <option value="6000000"
                                    >$6,000,000 Min</option>
                                <option value="7000000"
                                    >$7,000,000 Min</option>
                                <option value="8000000"
                                    >$8,000,000 Min</option>
                                <option value="9000000"
                                    >$9,000,000 Min</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-holder">
                        <div id="PRICE_to">
                            <!--<div class="large-label">Asking Price Max:</div>-->
                            <select class="large-control" name="values[PRICE_to]" style="/*width: 280px*/">
                                <option value="" disabled selected>Max Price</option>
                                <option value="10000"
                                    >$10,000 Max</option>
                                <option value="20000"
                                    >$20,000 Max</option>
                                <option value="30000"
                                    >$30,000 Max</option>
                                <option value="40000"
                                    >$40,000 Max</option>
                                <option value="50000"
                                    >$50,000 Max</option>
                                <option value="60000"
                                    >$60,000 Max</option>
                                <option value="70000"
                                    >$70,000 Max</option>
                                <option value="80000"
                                    >$80,000 Max</option>
                                <option value="90000"
                                    >$90,000 Max</option>
                                <option value="100000"
                                    >$100,000 Max</option>
                                <option value="200000"
                                    >$200,000 Max</option>
                                <option value="300000"
                                    >$300,000 Max</option>
                                <option value="400000"
                                    >$400,000 Max</option>
                                <option value="500000"
                                    >$500,000 Max</option>
                                <option value="600000"
                                    >$600,000 Max</option>
                                <option value="700000"
                                    >$700,000 Max</option>
                                <option value="800000"
                                    >$800,000 Max</option>
                                <option value="900000"
                                    >$900,000 Max</option>
                                <option value="1000000"
                                    >$1,000,000 Max</option>
                                <option value="2000000"
                                    >$2,000,000 Max</option>
                                <option value="3000000"
                                    >$3,000,000 Max</option>
                                <option value="4000000"
                                    >$4,000,000 Max</option>
                                <option value="5000000"
                                    >$5,000,000 Max</option>
                                <option value="6000000"
                                    >$6,000,000 Max</option>
                                <option value="7000000"
                                    >$7,000,000 Max</option>
                                <option value="8000000"
                                    >$8,000,000 Max</option>
                                <option value="9000000"
                                    >$9,000,000 Max</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-holder">
                        <div id="LEASE">
                            <!--<div class="large-label">For Lease:</div>-->
                            <select class="large-control" name="values[LEASE]" style="/*width: 280px*/">
                                <option value="" disabled selected>For Lease</option>
                                <option value="0"
                                    >No</option>
                                <option value="1"
                                    >Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-holder">
                        <div id="SALE">
                            <!--<div class="large-label">For Sale:</div>-->
                            <select class="large-control" name="values[SALE]" style="/*width: 280px*/">
                                <option value="" disabled selected>For Sale</option>
                                <option value="0"
                                    >No</option>
                                <option value="1"
                                    >Yes</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="jsonFields" value="{&quot;CITY&quot;:{&quot;description&quot;:&quot;City/Town&quot;,&quot;enumeration&quot;:{&quot;Blackfalds&quot;:&quot;Blackfalds&quot;,&quot;Lacombe&quot;:&quot;Lacombe&quot;,&quot;Penhold&quot;:&quot;Penhold&quot;,&quot;Red Deer&quot;:&quot;Red Deer&quot;,&quot;Sylvan Lake&quot;:&quot;Sylvan Lake&quot;},&quot;hide&quot;:false,&quot;input&quot;:&quot;select&quot;,&quot;name&quot;:&quot;CITY&quot;,&quot;type&quot;:&quot;TEXT&quot;},&quot;PROPERTY_SUBTYPE&quot;:{&quot;description&quot;:&quot;Property Sub Type&quot;,&quot;enumeration&quot;:{&quot;BUIL&quot;:&quot;Building&quot;,&quot;BUSI&quot;:&quot;Business&quot;,&quot;FLNB&quot;:&quot;Farm Land &amp; Buildings&quot;,&quot;INDU&quot;:&quot;Industrial&quot;,&quot;INST&quot;:&quot;Institutional&quot;,&quot;LAND&quot;:&quot;Land&quot;,&quot;LNDO&quot;:&quot;Farm Land Only&quot;,&quot;OFFI&quot;:&quot;Office&quot;,&quot;RETA&quot;:&quot;Retail&quot;,&quot;SHOP&quot;:&quot;Shopping Centre&quot;,&quot;WARE&quot;:&quot;Warehouse&quot;},&quot;hide&quot;:false,&quot;input&quot;:&quot;select&quot;,&quot;name&quot;:&quot;PROPERTY_SUBTYPE&quot;,&quot;type&quot;:&quot;TEXT&quot;},&quot;PRICE_from&quot;:{&quot;description&quot;:&quot;Asking Price Min&quot;,&quot;enumeration&quot;:{&quot;10000&quot;:&quot;$10,000 Min&quot;,&quot;20000&quot;:&quot;$20,000 Min&quot;,&quot;30000&quot;:&quot;$30,000 Min&quot;,&quot;40000&quot;:&quot;$40,000 Min&quot;,&quot;50000&quot;:&quot;$50,000 Min&quot;,&quot;60000&quot;:&quot;$60,000 Min&quot;,&quot;70000&quot;:&quot;$70,000 Min&quot;,&quot;80000&quot;:&quot;$80,000 Min&quot;,&quot;90000&quot;:&quot;$90,000 Min&quot;,&quot;100000&quot;:&quot;$100,000 Min&quot;,&quot;200000&quot;:&quot;$200,000 Min&quot;,&quot;300000&quot;:&quot;$300,000 Min&quot;,&quot;400000&quot;:&quot;$400,000 Min&quot;,&quot;500000&quot;:&quot;$500,000 Min&quot;,&quot;600000&quot;:&quot;$600,000 Min&quot;,&quot;700000&quot;:&quot;$700,000 Min&quot;,&quot;800000&quot;:&quot;$800,000 Min&quot;,&quot;900000&quot;:&quot;$900,000 Min&quot;,&quot;1000000&quot;:&quot;$1,000,000 Min&quot;,&quot;2000000&quot;:&quot;$2,000,000 Min&quot;,&quot;3000000&quot;:&quot;$3,000,000 Min&quot;,&quot;4000000&quot;:&quot;$4,000,000 Min&quot;,&quot;5000000&quot;:&quot;$5,000,000 Min&quot;,&quot;6000000&quot;:&quot;$6,000,000 Min&quot;,&quot;7000000&quot;:&quot;$7,000,000 Min&quot;,&quot;8000000&quot;:&quot;$8,000,000 Min&quot;,&quot;9000000&quot;:&quot;$9,000,000 Min&quot;},&quot;hide&quot;:false,&quot;input&quot;:&quot;select&quot;,&quot;name&quot;:&quot;PRICE_from&quot;,&quot;type&quot;:&quot;FLOAT&quot;},&quot;PRICE_to&quot;:{&quot;description&quot;:&quot;Asking Price Max&quot;,&quot;enumeration&quot;:{&quot;10000&quot;:&quot;$10,000 Max&quot;,&quot;20000&quot;:&quot;$20,000 Max&quot;,&quot;30000&quot;:&quot;$30,000 Max&quot;,&quot;40000&quot;:&quot;$40,000 Max&quot;,&quot;50000&quot;:&quot;$50,000 Max&quot;,&quot;60000&quot;:&quot;$60,000 Max&quot;,&quot;70000&quot;:&quot;$70,000 Max&quot;,&quot;80000&quot;:&quot;$80,000 Max&quot;,&quot;90000&quot;:&quot;$90,000 Max&quot;,&quot;100000&quot;:&quot;$100,000 Max&quot;,&quot;200000&quot;:&quot;$200,000 Max&quot;,&quot;300000&quot;:&quot;$300,000 Max&quot;,&quot;400000&quot;:&quot;$400,000 Max&quot;,&quot;500000&quot;:&quot;$500,000 Max&quot;,&quot;600000&quot;:&quot;$600,000 Max&quot;,&quot;700000&quot;:&quot;$700,000 Max&quot;,&quot;800000&quot;:&quot;$800,000 Max&quot;,&quot;900000&quot;:&quot;$900,000 Max&quot;,&quot;1000000&quot;:&quot;$1,000,000 Max&quot;,&quot;2000000&quot;:&quot;$2,000,000 Max&quot;,&quot;3000000&quot;:&quot;$3,000,000 Max&quot;,&quot;4000000&quot;:&quot;$4,000,000 Max&quot;,&quot;5000000&quot;:&quot;$5,000,000 Max&quot;,&quot;6000000&quot;:&quot;$6,000,000 Max&quot;,&quot;7000000&quot;:&quot;$7,000,000 Max&quot;,&quot;8000000&quot;:&quot;$8,000,000 Max&quot;,&quot;9000000&quot;:&quot;$9,000,000 Max&quot;},&quot;hide&quot;:false,&quot;input&quot;:&quot;select&quot;,&quot;name&quot;:&quot;PRICE_to&quot;,&quot;type&quot;:&quot;FLOAT&quot;},&quot;LEASE&quot;:{&quot;description&quot;:&quot;For Lease&quot;,&quot;enumeration&quot;:{&quot;0&quot;:&quot;No&quot;,&quot;1&quot;:&quot;Yes&quot;},&quot;hide&quot;:false,&quot;input&quot;:&quot;select&quot;,&quot;name&quot;:&quot;LEASE&quot;,&quot;type&quot;:&quot;BOOL&quot;},&quot;SALE&quot;:{&quot;description&quot;:&quot;For Sale&quot;,&quot;enumeration&quot;:{&quot;0&quot;:&quot;No&quot;,&quot;1&quot;:&quot;Yes&quot;},&quot;hide&quot;:false,&quot;input&quot;:&quot;select&quot;,&quot;name&quot;:&quot;SALE&quot;,&quot;type&quot;:&quot;BOOL&quot;}}">
                </fieldset>
            </div>
        </div></div>
<!--
    <div class="additional-search-controls" style="text-align: right">
        Listed:
        <select id="listedDate" name="listedDate">
            <option value=""
                    selected
                >--- Select ---</option>
            <option value="P-1W"

                >1 Week Ago</option>
            <option value="P-2W"

                >2 Weeks Ago</option>
            <option value="P-3W"

                >3 Weeks Ago</option>
            <option value="P-1M"

                >1 Month Ago</option>
            <option value="P-2M"

                >2 Months Ago</option>
            <option value="P-3M"

                >3 Months Ago</option>
        </select>
        <input type="hidden" name="_priceReduction" value="on">
        <label><input type="checkbox" name="priceReduction" id="priceReduction" value="true" >
            Price Reduction</label>
    </div>
-->
    <div class="mrp-search-form-buttons-container" style="padding: 0px 0px 30px 0px; text-align: right;">
        <div class="row"><div class="col-xs-6 col-xs-offset-6"><p><input type="submit" id="finishSearchButton" name="finishSearch"  class="form-button-large"
                                                                         value="Search" style="/*margin-left: 10px; width: 120px; font-weight: bold;*/"></p></div></div>

    </div>
    <input type="hidden" name="clearSession" value="">
    <input type="hidden" name="saveSearch" value="">
    <input type="hidden" name="reportSearch" value="">
    <input type="hidden" name="_sf_" value="custom_search,RED-DEER,AUTO">
</form>
<script type="text/javascript">
var page_title = '<?php echo $post->post_title; ?>';

    console.log(page_title);
    switch (page_title) {
        case 'For Lease':
            jQuery('select[name="values[LEASE]"').val('1')
        break;
        case 'For Sale':
            jQuery('select[name="values[SALE]"').val('1')
            break;
        case 'Blackfalds':
            jQuery('select[name="values[CITY]"').val('Blackfalds')
            break;
        case 'Lacombe':
            jQuery('select[name="values[CITY]"').val('Lacombe')
            break;
        case 'Penhold':
            jQuery('select[name="values[CITY]"').val('Penhold')
            break;
        case 'Red Deer':
            jQuery('select[name="values[CITY]"').val('Red Deer')
            break;
        case 'Sylvan Lake':
            jQuery('select[name="values[CITY]"').val('Sylvan Lake')
            break;
    }

</script>

