const minDuration = 10;
function makeSnowFlake()
{
    const snowflake = document.createElement("div");
    const delay = Math.random() * 10;
    const initialOpacity = Math.random();
    const duration = minDuration + Math.random() * 20;

    snowflake.classList.add("snowflake");
    snowflake.style.left = `${Math.random() * window.screen.width-10}px`;
    snowflake.style.animationDelay = `${delay}s`;
    snowflake.style.opacity = initialOpacity;
    snowflake.style.animation = `fall ${duration}s linear`;

    document.body.appendChild(snowflake);

    setTimeout(() => {
        snowflake.remove();
        makeSnowFlake();
    }, (duration + delay) * 1000);
}
for(let index = 0; index<50 ; index++)
{
    setTimeout(makeSnowFlake, index * 500)
}