import React from "react";

export const Nav = () => {
  return (
    <div className="nav">
      <nav className="nav justify-content-end">
        <a className="navbar-brand" href="#"></a>
        <div className="btn-group dropstart">
          <a
            className="btn btn-outline-dark dropdown-toggle btnmostrar"
            href="#" //catar bootstrap para react
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="25"
              height="25"
              fill="currentColor"
              className="bi bi-person-circle"
              viewBox="0 0 16 16"
            >
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path
                fillRule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
              />
            </svg>
          </a>

          <ul className="dropdown-menu">
            <li>
              <a className="dropdown-item" href="http://127.0.0.1:8000/listagem">
                Gerenciar figurinhas
              </a>
            </li>
            <li>
              <a className="dropdown-item" href="http://127.0.0.1:8000/logout">
                Sair
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  );
};
