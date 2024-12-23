/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package br.com.visao;

import br.com.controle.Cliente;
import br.com.entidade.ManterCliente;
import java.util.ArrayList;
import javax.swing.table.DefaultTableModel;

/**
 *
 * @author bryan
 */
public class TelaClienteListar extends javax.swing.JFrame {

    /**
     * Creates new form TelaClienteListar
     */
    public TelaClienteListar() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jScrollPane1 = new javax.swing.JScrollPane();
        jTlistar = new javax.swing.JTable();
        jBlistar = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);

        jTlistar.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {

            },
            new String [] {
                "id_cliente", "CPF", "Nome", "endereco", "email", "telefone"
            }
        ));
        jScrollPane1.setViewportView(jTlistar);

        jBlistar.setText("Listar");
        jBlistar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jBlistarActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 755, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                        .addContainerGap(374, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addComponent(jBlistar)
                        .addGap(309, 309, 309)))
                .addGap(0, 12, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 275, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(jBlistar)
                .addContainerGap(18, Short.MAX_VALUE))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void jBlistarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jBlistarActionPerformed
        // TODO add your handling code here:
        DefaultTableModel model = (DefaultTableModel) jTlistar.getModel();
        model.setRowCount(0);
        
        try {
        Cliente c = new Cliente();
            ManterCliente ca = new ManterCliente();        
        DefaultTableModel PesquisarTudo = (DefaultTableModel) jTlistar.getModel();  
        {
        ArrayList<Cliente> clientes = ca.PesquisarTudo();  
        for (int i = 0; i < clientes.size(); i++) {                
            c = clientes.get(i);
            PesquisarTudo.addRow(new Object[]{c.getId_cliente(),c.getCpf(),c.getNome(),c.getEndereco(),
                                            c.getEmail(),c.getTelefone()});
        }
        }
       }
       catch (Exception e){
            System.out.println("Erro " + e.getMessage());
       }
    }//GEN-LAST:event_jBlistarActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(TelaClienteListar.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(TelaClienteListar.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(TelaClienteListar.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(TelaClienteListar.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new TelaClienteListar().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jBlistar;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JTable jTlistar;
    // End of variables declaration//GEN-END:variables
}
