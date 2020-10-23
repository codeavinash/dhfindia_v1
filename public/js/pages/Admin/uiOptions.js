av('#bannerImge').addEventListener('change',()=>{
    av('#imagePreViewBox').style.display = 'block';
    av('.submitBtn').style.display = 'block';
    imagePreview('#bannerImge','#imagePreViewBox');
});