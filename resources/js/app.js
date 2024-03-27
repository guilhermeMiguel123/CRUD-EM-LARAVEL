import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const content = document.querySelector('.content');
    content.style.opacity = '0';
    content.style.transition = 'opacity 0.5s ease';

    setTimeout(() => {
        content.style.opacity = '1';
    }, 500);
});

document.addEventListener('DOMContentLoaded', function() {
    const solicitacoesDiv = document.getElementById('solicitacoes');
    let numSolicitacoes = 0;

    function adicionarSolicitacao() {
        numSolicitacoes++;
        const novaSolicitacao = document.createElement('div');
        novaSolicitacao.classList.add('solicitacao');
        novaSolicitacao.textContent = `Solicitação ${numSolicitacoes}`;
        solicitacoesDiv.appendChild(novaSolicitacao);

        setTimeout(() => {
            novaSolicitacao.style.transform = `translateX(${Math.random() * 200}px)`; 
        }, 100);

        setTimeout(() => {
            novaSolicitacao.classList.add('animate'); 
        }, 200);
    }

    setInterval(adicionarSolicitacao, 5000); 
});
