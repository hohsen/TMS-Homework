/* eslint-disable no-unused-vars */
/* eslint-disable no-shadow */
export const enum ItemStatus {
  NEW = "NEW",
  COMPLETED = "COMPLETED",
}

export const mockTasks = [
  { id: "h18ebac", title: "Вынести мусор", status: ItemStatus.NEW },
  { id: "lDAc9If", title: "Приготовить ужин", status: ItemStatus.NEW },
  { id: "I1aba0c", title: "Выспаться", status: ItemStatus.COMPLETED },
];
