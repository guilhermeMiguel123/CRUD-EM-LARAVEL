@section('content')
<div class="card-container">
    <div class="card">
        <div class="content">
            <p class="heading">Clientes</p>
            <p class="description">Descrição: Este card exibe informações sobre os clientes que utilizam os serviços da nossa assistência técnica.</p>
            <p class="para">
            <button class="c-button c-button--gooey"> <a href="{{ route('clientes.index') }}">Clientes</a>
                <div class="c-button__blobs">
                <div></div>
                <div></div>
                <div></div>
                </div>
                </button>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
                <defs>
                    <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                    <feBlend in="SourceGraphic" in2="goo"></feBlend>
                    </filter>
                </defs>
                </svg>
            </button>

            </p>
        </div>
    </div>

    <div class="card">
        <div class="content">
            <p class="heading">Assistências</p>
            <p class="description">Descrição: Este card exibe informações sobre as assistências técnicas realizadas para os clientes da nossa assistência técnica.</p>
            <p class="para">
            <button class="c-button c-button--gooey"> <a href="{{ route('assistencias.index') }}">Assistências</a>
                <div class="c-button__blobs">
                <div></div>
                <div></div>
                <div></div>
                </div>
                </button>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
                <defs>
                    <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                    <feBlend in="SourceGraphic" in2="goo"></feBlend>
                    </filter>
                </defs>
                </svg>
            </button>
          
                
            </p>
        </div>
    </div>
</div>

<style>
.card-container {
    display: flex;
    justify-content: space-between;
    margin-top: 25px;
}


.card {
    flex-grow: 1;
    flex-basis: 45%; 
    margin-right: 20px; 
}

.card:last-child {
    margin-right: 0; 
}

.content {
   
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    padding: 20px;
    border-radius: 22px;
    color: #ffffff;
    overflow: hidden;
    background: #ffffff;
    transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.content .heading {
    color: #000000;
    font-weight: 700;
    font-size: 36px;
    line-height: 1.3;
    z-index: 1;
    transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.content .para {
    width: 100%;
    margin: auto;
    text-align: center;
    z-index: 1;
    opacity: 0.8;
    font-size: 18px;
    transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
}

.content .description{
    color: #000000;
}

.c-button {
 
  color: #000;
  font-weight: 700;
  font-size: 10px;
  text-decoration: none; /* Remove a decoração de link */
  padding: 0.9em 1.6em;
  cursor: pointer;
  display: inline-block;
  vertical-align: middle;
  position: relative;
  z-index: 1;
}

.c-button--gooey {
  color: #06c8d9;
  text-transform: uppercase;
  letter-spacing: 2px;
  border: 4px solid #06c8d9;
  border-radius: 0;
  position: relative;
  transition: all 700ms ease;
}

.c-button--gooey .c-button__blobs {
  height: 100%;
  filter: url(#goo);
  overflow: hidden;
  position: absolute;
  top: 0;
  left: 0;
  bottom: -3px;
  right: -1px;
  z-index: -1;
}

.c-button--gooey .c-button__blobs div {
  background-color: #06c8d9;
  width: 34%;
  height: 100%;
  border-radius: 100%;
  position: absolute;
  transform: scale(1.4) translateY(125%) translateZ(0);
  transition: all 700ms ease;
}

.c-button--gooey .c-button__blobs div:nth-child(1) {
  left: -5%;
}

.c-button--gooey .c-button__blobs div:nth-child(2) {
  left: 30%;
  transition-delay: 60ms;
}

.c-button--gooey .c-button__blobs div:nth-child(3) {
  left: 66%;
  transition-delay: 25ms;
}

.c-button--gooey:hover {
  color: #fff;
}

.c-button--gooey:hover .c-button__blobs div {
  transform: scale(1.4) translateY(0) translateZ(0);
}

.card::before {
    content: "";
    position: absolute;
   color: #bbb lue;;
    border-radius: inherit;
    background: #0a3cff;
    background: linear-gradient(to right, #0a3cff, #0a3cff);
    transform-origin: center;
    animation: moving 4.8s linear infinite paused;
    transition: all 0.88s cubic-bezier(0.23, 1, 0.32, 1);
}

.card:hover::before {
    animation-play-state: running;
    z-index: -1;
}

.card:hover .content .heading,
.card:hover .content .para {
    color: #000000;
}

.card:hover {
    box-shadow: 0rem 6px 13px rgba(10, 60, 255, 0.1),
        0rem 24px 24px rgba(10, 60, 255, 0.09),
        0rem 55px 33px rgba(10, 60, 255, 0.05),
        0rem 97px 39px rgba(10, 60, 255, 0.01), 0rem 152px 43px rgba(10, 60, 255, 0);
    scale: 1.05;
    color: #000000;
}

@keyframes moving {
    0% {
        transform: rotate(0);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>

<div class="content">
    <div id="solicitacoes"></div> 
</div>
@endsection
