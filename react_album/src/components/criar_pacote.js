import React from "react";

export const CriarPacote = () => {
  return (
    <div name="figurinhas" className="pacote">
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <a href="{{ route('createPacoteFigurinha') }}" className="btn">
          Gerar Pacote
        </a>
      </form>
    </div>
  );
};
