import Header from "./Component/Header";
import "./App.css";
import SideBar from "./Component/Sidebar";
import Content from "./Component/Content";

function App() {
  return (
    <>
      <div className="App">
        <Header />
        <SideBar />
        <Content />
      </div>
    </>
  );
}

export default App;