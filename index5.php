<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    canvas {background:#eee;}
    .color-btn{
        width:30px;
        height:30px;
        border:0;
        border-radius:50%;
    }
    .color-btn[data-color='black']{background:black;}
    .color-btn[data-color='red']{background:red;}
    .color-btn[data-color='green']{background:green;}
    .color-btn[data-color='blue']{background:blue;}

    .image-btn {
        width:40px;
        height:40px;
        background:url(original_2.png) no-repeat 50% 50% / cover;
    }

    </style>
</head>
<body>
    <h1>서명</h1>

    <div class="control">
        <button class="color-btn" data-type="color" data-color="red"></button>
        <button class="color-btn" data-type="color" data-color="black"></button>
        <button class="color-btn" data-type="color" data-color="green"></button>
        <button class="color-btn" data-type="color" data-color="blue"></button>
        <button class="image-btn" data-type="image" ></button>
    </div>
    <button class="save-btn">이미지 저장</button>
    <div class="result-image"></div>
    <canvas class="canvas" width="500" height="300"></canvas>

    <script>
        const canvas = document.querySelector('.canvas');
        const context = canvas.getContext('2d');
        const control = document.querySelector('.control');
        const saveBtn = document.querySelector('.save-btn');
        const resultImage = document.querySelector('.result-image');
        let drawingMode;
        let brush = 'color';
        let colorVal ='black';
        const imgElem = new Image();
        imgElem.src = 'original_2.png';

        function downHandler(){
            drawingMode = true;
        }

        function upHandler(){
            drawingMode = false;
        }

        function moveHandler(e){
            if(!drawingMode) return;

            switch(brush){
                case 'color':
                    context.beginPath();
                    context.arc(e.offsetX,e.offsetY,10,0,Math.PI*2, false);
                    context.fill();
                    break;
                case 'image':
                    context.drawImage(imgElem, e.offsetX,e.offsetY,50,50);
                    break;
            }
            
        }

        function setColor(e){
            brush = e.target.getAttribute('data-type');
            colorVal = e.target.getAttribute('data-color');
            context.fillStyle = colorVal;
        }

        function createImage(){
            const url = canvas.toDataURL('image/png');
            const imgElem = new Image();
            imgElem.src = url;
            resultImage.appendChild(imgElem);
        }

        canvas.addEventListener('mousedown', downHandler);
        canvas.addEventListener('mousemove', moveHandler);
        canvas.addEventListener('mouseup', upHandler);
        control.addEventListener('click', setColor);
        saveBtn.addEventListener('click', createImage);

        //const imgElem = document.createElement('img');
        // const imgElem = new Image();
        // imgElem.src = 'original_2.png';
        // imgElem.addEventListener('load', () => {
        //     context.drawImage(imgElem, 50, 50);
        //     context.drawImage(imgElem, 50, 50, 70, 120);
        //     context.drawImage(imgElem, 100, 100, 200, 200, 0, 0, 100, 100);
        // });


        //let xPos = 10;
        //let timerId;

        // function draw(){
        //     context.clearRect(0, 0, canvas.width, canvas.height);
        //     context.beginPath();
        //     context.arc(xPos, 150, 10, 0, Math.PI*2, false);
        //     context.fill();
        //     xPos +=1;

        //     timerId = requestAnimationFrame(draw);
        //     console.log(timerId);

        //     // if(xPos >= canvas.width - 10){
        //     //     cancelAnimationFrame(timerId);
        //     // }
        // }

        // draw();

        // canvas.addEventListener('click', () => {
        //     cancelAnimationFrame(timerId);
        // });
    </script>

</body>
</html>