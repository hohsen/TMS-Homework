import { FC, useState } from "react";

import { ItemStatus } from "../../mockData";

interface Item {
  id: string;
  title: string;
  status: ItemStatus;
}

interface ListItems {
  items: Item[];
}

export const List: FC<ListItems> = ({ items }) => {
  const [list, setList] = useState<Item[]>(items);

  const deleteTask = (id: string) => {
    setList((prevList) => prevList.filter((item) => item.id !== id));
  };

  return (
    <div>
      {list.map((item) => (
        <div
          key={item.id}
          style={{
            textDecoration:
              item.status === ItemStatus.COMPLETED ? "line-through" : "none",
          }}
        >
          {item.title}
          <button onClick={() => deleteTask(item.id)}>Delete</button>
        </div>
      ))}
    </div>
  );
};
