Province District and Municipal Selection of Nepal based on jQuery

Demo at https://district.opensource.onezero.com.np/

Just include https://district.opensource.onezero.com.np/js/ekSunyeLocalBodyNepal.js after jQuery

<pre>
<script src="https://district.opensource.onezero.com.np/js/ekSunyeLocalBodyNepal.js"></script>
</pre>
<pre>
<script>
       $('#provinceID').provinceSelect({targetDistrict:'#districtID',targetMunicipal:'#municipalityID'});
       //#provinceID is ID for province <select> html element
       //#districtID is ID for district <select> html element
       //#municipalityID is ID for municipality <select> html element
</script>
</pre>

