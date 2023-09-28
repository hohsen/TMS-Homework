import ReactDOM from "react-dom/client";

import "./index.css";

import { ChangeColorButton } from "./features/ChangeColor";
import { List } from "./features/ListRender/List";
import { mockTasks } from "./mockData";

const root = ReactDOM.createRoot(
  document.getElementById("root") as HTMLElement,
);

root.render(
  <div>
    <ChangeColorButton />
    <h2>To-do list</h2>
    <List items={mockTasks} />
  </div>,
);
