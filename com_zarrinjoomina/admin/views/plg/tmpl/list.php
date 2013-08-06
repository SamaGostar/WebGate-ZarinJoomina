<?php
/**
 * @version    $$andspvhjr
 * @package    zarinjoomina
 * @subpackage Base
 * @author     EasyJoomla {@link http://barnamenevisan.ir}
 * @author     vahid hajipour {@vahidhajipour}
 * @author     Created on 24-Apr-2011
 * @license    GNU/GPL
 */
 defined('_JEXEC') or die('Restricted access'); ?>
<form  style="direction: rtl;text-align: right;" action="index.php" method="post" name="adminForm">
<div id="editcell">
	<table class="adminlist">
	<thead>
		<tr>
			<th width="5">
				<?php echo JText::_( 'ID' ); ?>
			</th>
			<th width="20">
				<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count( $this->items ); ?>);" />
			</th>			
			<th>
				<?php echo JText::_( 'نام کالا' ); ?>
			</th>
			<th>
				<?php echo JText::_( 'قیمت' ); ?>
			</th>
			<th>
				<?php echo JText::_( 'قیمت قبلی' ); ?>
			</th>
			<th>
				<?php echo JText::_( 'توضیحات' ); ?>
			</th>
            <th>
				<?php echo JText::_( 'موجودی در انبار' ); ?>
			</th>                                        
		</tr>
	</thead>
	<?php
	$k = 0;
	for ($i=0, $n=count( $this->items ); $i < $n; $i++)	{
		$row = &$this->items[$i];
		$checked 	= JHTML::_('grid.id',   $i, $row->id );
		$link 		= JRoute::_( '#'. $row->id );
		?>
		<tr  class="<?php echo "row$k"; ?> style="direction: rtl;text-align: right;">
			<td>
				<a href="<?php echo $link; ?>"><?php echo $row->id ?></a>
			</td>
			<td>
				<?php echo $checked; ?>
			</td>
			<td>
			<?php echo $row->pro_name; ?>
			</td>
            <td>
				<?php echo $row->pro_price; ?>
			</td>
            <td>
				<?php echo $row->pro_l_price; ?>
			</td>
            <td>
				<?php echo $row->pro_des; ?>
			</td>
             <td>
		    	<?php echo $row->pro_various; ?>
			</td>
		</tr>
		<?php
		$k = 1 - $k;
	}
	?>
    
	 <tfoot>
    <tr>
      <td colspan="6">
      	<?php echo $this->pagination->getListFooter(); ?>
      </td>
    </tr>
  </tfoot>    
	</table>
</div>

<input type="hidden" name="option" value="com_zarinjoomina" />
<input type="hidden" name="task" value="" />
<input type="hidden" name="boxchecked" value="0" />
<input type="hidden" name="controller" value="zarinjoomina" />
</form>
