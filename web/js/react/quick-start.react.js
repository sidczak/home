class MojKomponent extends React.Component {
  constructor(props) {
    super(props);
  }
  
  render() {
    const { title = "Modal", content = "Desc", welcome } = this.props
    
    return (
      <div>
        <h1>{ title }</h1>
        <h2>{ content }</h2>
        <h3>{ welcome }</h3>
      </div>
    );
  }
}

/*
function MojKomponent({ title = "Modal", content = "Desc", welcome = "ppp" }) {
  return (
    <div>
      <h1>{ title }</h1>
      <h2>{ content }</h2>
      <h2>{ welcome }</h2>
      <h3></h3>
    </div>
  );
}
*/

const node = document.getElementById('app');
ReactDOM.render(
  <MojKomponent
    {...(node.dataset)}
    title = "Modal"
    content="To było prostsze niż by się mogło wydawać, prawda?"
  />,
  node
);