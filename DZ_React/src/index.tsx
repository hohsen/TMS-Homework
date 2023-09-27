import ReactDOM from "react-dom/client";

import "./index.css";

import { ChangeColorButton } from "./features/ChangeColor";

const root = ReactDOM.createRoot(
  document.getElementById("root") as HTMLElement,
);

root.render(
  <div>
    <ChangeColorButton />,
  </div>,
);
