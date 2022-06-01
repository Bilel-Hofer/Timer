// récupération des element
const minWrapperTens = document.getElementById('min-ten');
const minWrapperOne = document.getElementById('min-one');
const secWrapperTens = document.getElementById('sec-ten');
const secWrapperOne = document.getElementById('sec-one');
const hunWrapperTens = document.getElementById('hun-ten');
const hunWrapperOne = document.getElementById('hun-one');

// récupération des minutes
const min = parseInt(document.getElementById('min').outerText);

// initialisation des delay
const delay = ms => new Promise(res => setTimeout(res, ms));

// arrête les animations
const pause10Min = async () => {
    await delay(540000);
    minWrapperOne.style.animation = 'none';
    minWrapperOne.offsetHeight;
    await delay(50000);
    secWrapperTens.style.animation = 'none';
    secWrapperTens.offsetHeight;
    await delay(9000);
    secWrapperOne.style.animation = 'none';
    secWrapperOne.offsetHeight;
    await delay(900);
    hunWrapperTens.style.animation = 'none';
    hunWrapperTens.offsetHeight;
    await delay(90);
    hunWrapperOne.style.animation = 'none';
    hunWrapperOne.offsetHeight;
};

// arrête les animations
const pause20Min = async () => {
    await delay(600000);
    minWrapperTens.style.animation = 'none';
    minWrapperTens.offsetHeight;
    await delay(540000);
    minWrapperOne.style.animation = 'none';
    minWrapperOne.offsetHeight;
    await delay(50000);
    secWrapperTens.style.animation = 'none';
    secWrapperTens.offsetHeight;
    await delay(9000);
    secWrapperOne.style.animation = 'none';
    secWrapperOne.offsetHeight;
    await delay(900);
    hunWrapperTens.style.animation = 'none';
    hunWrapperTens.offsetHeight;
    await delay(90);
    hunWrapperOne.style.animation = 'none';
    hunWrapperOne.offsetHeight;
};

// arrête les animations
const pause30Min = async () => {
    await delay(1200000);
    minWrapperTens.style.animation = 'none';
    minWrapperTens.offsetHeight;
    await delay(540000);
    minWrapperOne.style.animation = 'none';
    minWrapperOne.offsetHeight;
    await delay(50000);
    secWrapperTens.style.animation = 'none';
    secWrapperTens.offsetHeight;
    await delay(9000);
    secWrapperOne.style.animation = 'none';
    secWrapperOne.offsetHeight;
    await delay(900);
    hunWrapperTens.style.animation = 'none';
    hunWrapperTens.offsetHeight;
    await delay(90);
    hunWrapperOne.style.animation = 'none';
    hunWrapperOne.offsetHeight;
};

// arrête les animations
const pause40Min = async () => {
    await delay(1800000);
    minWrapperTens.style.animation = 'none';
    minWrapperTens.offsetHeight;
    await delay(540000);
    minWrapperOne.style.animation = 'none';
    minWrapperOne.offsetHeight;
    await delay(50000);
    secWrapperTens.style.animation = 'none';
    secWrapperTens.offsetHeight;
    await delay(9000);
    secWrapperOne.style.animation = 'none';
    secWrapperOne.offsetHeight;
    await delay(900);
    hunWrapperTens.style.animation = 'none';
    hunWrapperTens.offsetHeight;
    await delay(90);
    hunWrapperOne.style.animation = 'none';
    hunWrapperOne.offsetHeight;
};

// arrête les animations
const pause50Min = async () => {
    await delay(2400000);
    minWrapperTens.style.animation = 'none';
    minWrapperTens.offsetHeight;
    await delay(540000);
    minWrapperOne.style.animation = 'none';
    minWrapperOne.offsetHeight;
    await delay(50000);
    secWrapperTens.style.animation = 'none';
    secWrapperTens.offsetHeight;
    await delay(9000);
    secWrapperOne.style.animation = 'none';
    secWrapperOne.offsetHeight;
    await delay(900);
    hunWrapperTens.style.animation = 'none';
    hunWrapperTens.offsetHeight;
    await delay(90);
    hunWrapperOne.style.animation = 'none';
    hunWrapperOne.offsetHeight;
};

// arrête les animations
const pause60Min = async () => {
    await delay(3000000);
    minWrapperTens.style.animation = 'none';
    minWrapperTens.offsetHeight;
    await delay(540000);
    minWrapperOne.style.animation = 'none';
    minWrapperOne.offsetHeight;
    await delay(50000);
    secWrapperTens.style.animation = 'none';
    secWrapperTens.offsetHeight;
    await delay(9000);
    secWrapperOne.style.animation = 'none';
    secWrapperOne.offsetHeight;
    await delay(900);
    hunWrapperTens.style.animation = 'none';
    hunWrapperTens.offsetHeight;
    await delay(90);
    hunWrapperOne.style.animation = 'none';
    hunWrapperOne.offsetHeight;
};

// préparation des fin d'animations
if (min === 10) {
    minWrapperTens.style.animation = 'none';
    minWrapperTens.style.animationPlayState = 'paused';
    pause10Min();
} else if (min === 20) {
    pause20Min();
} else if (min === 30) {
    pause30Min()
} else if (min === 40) {
    pause40Min()
} else if (min === 50) {
    pause50Min()
} else if (min === 60) {
    pause60Min()
}