using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Calculator
{
    public partial class Form1 : Form
    {
        Double val = 0;
        String text = "";
        bool oper_pres = false;
        private object x;

        public Form1()
        {
            InitializeComponent();
        }

        private void Button_click(object sender, EventArgs e)
        {
            if((output.Text == "0") || (oper_pres))
            {
                output.Clear();
            }

            Button button = (Button)sender;
            output.Text += button.Text;
            oper_pres = false;
        }

        private void button12_click(object sender, EventArgs e)
        {
            output.Text = "0";
        }

        private void op_pres(object sender, EventArgs e)
        {
            Button button = (Button)sender;
            text = button.Text;
            val = Double.Parse(output.Text);
            oper_pres = true;
        }

        private void op_res(object sender, EventArgs e)
        {
            switch (text)
            {
                case "+":
                    output.Text = (val + double.Parse(output.Text)).ToString();
                    break;

                case "-":
                    output.Text = (val - double.Parse(output.Text)).ToString();
                    break;

                case "/":
                    output.Text = (val / double.Parse(output.Text)).ToString();
                    break;

                case "*":
                    output.Text = (val * double.Parse(output.Text)).ToString();
                    break;
                default:
                    break;
            }
            oper_pres = false;
        }

        private void c_pres(object sender, EventArgs e)
        {
            output.Text = output.Text.Remove(output.Text.Length - 1, 1);
        }

        private void pictureBox1_Click(object sender, EventArgs e)
        {
            Close();
        }

        private void op_plusmin(object sender, EventArgs e)
        {
            if (output.Text.Contains("-"))
                output.Text = output.Text.Remove(0, 1);
            else
                output.Text = "-" + output.Text;
        }
    }
}
