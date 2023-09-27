export function ChangeColorButton() {
  //   const [color, setColor] = useState("white");
  //   // eslint-disable-next-line no-shadow
  //   const click = (color: SetStateAction<string>) => {
  //     setColor(color);
  //   };
  //   useEffect(() => {
  //     document.body.style.backgroundColor = color;
  //   }, [color]);
  //   return (
  //     <button
  //       onClick={() => {
  //         click((document.body.style.backgroundColor = "black"));
  //       }}
  //     >
  //       Make it black
  //     </button>
  //   );

  function changeColor() {
    if (document.body.style.backgroundColor === "white") {
      document.body.style.backgroundColor = "black";
    } else {
      document.body.style.backgroundColor = "white";
    }
  }
  return <button onClick={changeColor}>Make it black</button>;
}
