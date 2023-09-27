import { FC, useState } from "react";

import { mockTasks } from "../../mockData";

const List: FC = () => {
  const [list, setList] = useState([mockTasks]);

  //   const deleteTask = (status: ItemStatus) => {
  //     setList((prevList) => prevList.filter((item) => item.status === COMPLETED));
  //   };
  return <div></div>;
};
