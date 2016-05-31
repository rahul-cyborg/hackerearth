require 'matrix'
arr = gets.chomp.strip.split(' ')
n = arr[0]
m = arr[1]
matrix = []
row_sum = []
column_sum = []
n.to_i.times do
  row = gets.chomp.strip.split(' ').map(&:to_i)
  sum = row.inject(0){|sum,x| sum + x }
  row_sum << sum
  matrix << row
end
new_matrix = Matrix.columns(matrix)
count = 0 
sum = 0 
len = n.to_i
new_matrix.each do |val|
  if count < len
    count += 1
    sum = sum + val.to_i
  end
  if count == len 
      column_sum << sum
      count = 0
      sum = 0
  end
end

max = row_sum[0] ^ column_sum[0]

(0...row_sum.length).each do |i|
  (0...column_sum.length).each do |j|
    xor = row_sum[i] ^ column_sum[j]
    max = xor if max < xor
  end
end

puts max




