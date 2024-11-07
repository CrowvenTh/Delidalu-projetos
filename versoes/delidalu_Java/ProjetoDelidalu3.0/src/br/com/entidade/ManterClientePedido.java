package br.com.entidade;

import br.com.controle.ClientePedido;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;

public class ManterClientePedido extends DAO {
    public void inserir(ClientePedido cp) throws Exception {
        abrirBanco();
        String query = "INSERT INTO cliente_pedido(id_pedido, id_cliente, id_produto, quantidade_pedido, tipo_pedido, mes, ano) "
                     + "VALUES (null, ?, ?, ?, ?, ?, ?)";
        pst = con.prepareStatement(query);
        pst.setInt(1, cp.getId_cliente());
        pst.setInt(2, cp.getId_produto());
        pst.setInt(3, cp.getQuantidade_pedido());
        pst.setString(4, cp.getTipo_pedido());
        pst.setInt(5, cp.getMes());
        pst.setInt(6, cp.getAno());
        pst.executeUpdate();
        fecharBanco();
    }
    
    public void deletar(ClientePedido cp) throws Exception {
        abrirBanco();
        String query = "DELETE FROM cliente_pedido WHERE id_pedido=?";
        pst = con.prepareStatement(query);
        pst.setInt(1, cp.getId_pedido());
        pst.executeUpdate();
        fecharBanco();
    }
    
    public ArrayList<ClientePedido> listar() throws Exception {
        abrirBanco();
        String query = "SELECT * FROM cliente_pedido";
        pst = con.prepareStatement(query);
        ResultSet rs = pst.executeQuery();
        
        ArrayList<ClientePedido> lista = new ArrayList<>();
        while (rs.next()) {
            ClientePedido cp = new ClientePedido();
            cp.setId_pedido(rs.getInt("id_pedido"));
            cp.setId_cliente(rs.getInt("id_cliente"));
            cp.setId_produto(rs.getInt("id_produto"));
            cp.setQuantidade_pedido(rs.getInt("quantidade_pedido"));
            cp.setTipo_pedido(rs.getString("tipo_pedido"));
            cp.setMes(rs.getInt("mes"));
            cp.setAno(rs.getInt("ano"));
            lista.add(cp);
        }
        
        fecharBanco();
        return lista;
    }
    
    public void alterar(ClientePedido cp) throws Exception {
        abrirBanco();
        String query = "UPDATE cliente_pedido SET id_cliente=?, id_produto=?, quantidade_pedido=?, tipo_pedido=?, mes=?, ano=? WHERE id_pedido=?";
        pst = con.prepareStatement(query);
        pst.setInt(1, cp.getId_cliente());
        pst.setInt(2, cp.getId_produto());
        pst.setInt(3, cp.getQuantidade_pedido());
        pst.setString(4, cp.getTipo_pedido());
        pst.setInt(5, cp.getMes());
        pst.setInt(6, cp.getAno());
        pst.setInt(7, cp.getId_pedido());
        pst.executeUpdate();
        fecharBanco();
    }
}